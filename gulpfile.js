var gutil = require('gulp-util');

require('laravel-elixir-vueify');

//require('stringify');

// this is way of overriding alixir config
// the other way to have alixir.json into the project root folder
gutil.env.ALIXIR_CONFIG =
{
    files: {
        styles: "resources/assets/styles.json",
        scripts: "resources/assets/scripts.json",
        assets: "resources/assets/assets.json"
    
    },
    filters: {
        "%bower%": "vendor/bower_components",
        "%<<<bower%": "../../../vendor/bower_components",
        "%<<<node%": "../../../node_modules"
    },
    other: {
        chmod: 666
    }
};

require("alixir");