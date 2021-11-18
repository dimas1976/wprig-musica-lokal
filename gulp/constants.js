/* eslint-env es6 */
'use strict';

/**
 * External dependencies
 */
export const gulpPlugins = require( 'gulp-load-plugins' )();
import path from 'path';

/**
 * Internal dependencies
 */
import {
	getThemeConfig,
	configValueDefined,
} from './utils';

// Root path is where npm run commands happen
export const rootPath = process.cwd();

export const gulpPath = `${ rootPath }/gulp`;

export const gulpTestPath = `${ rootPath }/gulp/tests`;

// Dev or production
export const isProd = ( process.env.NODE_ENV === 'production' );

// get the config
const config = getThemeConfig();

// directory for the production theme
export const prodThemePath = path.normalize( `${ rootPath }/../${ config.theme.slug }` );

// directory for assets (CSS, JS, img)
export const assetsDir = `${ rootPath }`;

// directory for assets (CSS, JS, img) in production
export const prodAssetsDir = `${ prodThemePath }`;

// PHPCS options
export const PHPCSOptions = {
	bin: `${ rootPath }/vendor/bin/phpcs`,
	standard: `${ rootPath }/phpcs.xml.dist`,
	warningSeverity: 0,
};

// Theme config name fields and their defaults
export const nameFieldDefaults = {
	author: 'The WP Rig Contributors',
	PHPNamespace: 'WP_Rig\\WP_Rig',
	slug: 'wp-rig',
	name: 'WP Rig',
	underscoreCase: 'wp_rig',
	constant: 'WP_RIG',
	camelCase: 'WpRig',
	camelCaseVar: 'wpRig',
};

// Project paths
const paths = {
	assetsDir,
	browserSync: {
		dir: `${ rootPath }/BrowserSync`,
		cert: `${ rootPath }/BrowserSync/wp-rig-browser-sync-cert.crt`,
		caCert: `${ rootPath }/BrowserSync/wp-rig-browser-sync-root-cert.crt`,
		key: `${ rootPath }/BrowserSync/wp-rig-browser-sync-key.key`,
	},
	config: {
		themeConfig: `${ rootPath }/config/themeConfig.js`,
	},
	php: {
		src: [
			`${ rootPath }/**/*.php`,
			`!${ rootPath }/optional/**/*.*`,
			`!${ rootPath }/tests/**/*.*`,
			`!${ rootPath }/vendor/**/*.*`,
		],
		dest: `${ rootPath }/`,
	},
	styles: {
		editorSrc: [
			`${ assetsDir }/css/src/editor/**/*.css`,
			// Ignore partial files.
			`!${ assetsDir }/css/src/**/_*.css`,
		],
		editorSrcDir: `${ assetsDir }/css/src/editor`,
		editorDest: `${ assetsDir }/css/editor`,
		src: [
			`${ assetsDir }/css/src/**/*.css`,
			// Ignore partial files.
			`!${ assetsDir }/css/src/**/_*.css`,
			// Ignore editor source css.
			`!${ assetsDir }/css/src/editor/**/*.css`,
		],
		srcDir: `${ assetsDir }/css/src`,
		dest: `${ assetsDir }/css`,
	},
	scripts: {
		src: [
			`${ assetsDir }/js/src/**/*.js`,
			// Ignore partial files.
			`!${ assetsDir }/js/src/**/_*.js`,
		],
		srcDir: `${ assetsDir }/js/src`,
		dest: `${ assetsDir }/js`,
	},
	images: {
		src: `${ assetsDir }/img/src/**/*.{jpg,JPG,png,svg,gif,GIF}`,
		dest: `${ assetsDir }/img/`,
	},
	export: {
		src: [],
		stringReplaceSrc: [
			`${ rootPath }/style.css`,
			`${ rootPath }/languages/*.po`,
		],
	},
	languages: {
		src: [
			`${ rootPath }/**/*.php`,
			`!${ rootPath }/optional/**/*.*`,
			`!${ rootPath }/tests/**/*.*`,
			`!${ rootPath }/vendor/**/*.*`,
		],
		dest: `${ rootPath }/languages/${ nameFieldDefaults.slug }.pot`,
	},
};

// Add rootPath to filesToCopy and additionalFilesToCopy
const additionalFilesToCopy = configValueDefined( 'export.additionalFilesToCopy' ) ? config.export.additionalFilesToCopy : [];
const filesToCopy = configValueDefined( 'export.filesToCopy' ) ? config.export.filesToCopy : [];
for ( const filePath of filesToCopy.concat( additionalFilesToCopy ) ) {
	// Add the files to export src
	paths.export.src.push( `${ rootPath }/${ filePath }` );
}

// Override paths for production
if ( isProd ) {
	paths.php.dest = `${ prodThemePath }/`;
	paths.styles.dest = `${ prodAssetsDir }/css/`;
	paths.styles.editorDest = `${ prodAssetsDir }/css/editor/`;
	paths.scripts.dest = `${ prodAssetsDir }/js/`;
	paths.images.dest = `${ prodAssetsDir }/img/`;
	paths.languages = {
		src: `${ prodThemePath }/**/*.php`,
		dest: `${ prodThemePath }/languages/${ config.theme.slug }.pot`,
	};
}

export { paths };
