const replace = require( 'replace-in-file' );
//process.argv;
class Replace {
    constructor( process ) {
        this.process = process || [];
        this.name = 'StarterTheme';
        this.textDomain = `'st'`;
        this.formmatName();
        this.replaceNamepace();
        this.replaceNameTheme();
    }

    replaceNamepace() {
        this.replaceText( [
            'src/*',
            'composer.json',
            'functions.php'
        ], [ /StarterTheme/g, /'st'/g ], [ this.name, this.textDomain ] );
    }

    replaceNameTheme() {
        this.replaceText( [
            'sass/style.scss',
        ], 'Starter Theme', this.name );
    }

    replaceText( file = [], from, to ) {
        const options = {
            files: file,
            from: from,
            to: to,
        };
        replace( options )
            .then( results => {
                console.log( 'Replacement results:', results );
            } )
            .catch( error => {
                console.error( 'Error occurred:', error );
            } );
    }

    formmatName() {

        this.process.forEach( argv => {
            if ( !argv.indexOf( 'namespace' ) ) {
                const index = argv.search( '=' );
                this.name = argv.slice( index + 1, argv.length );
            }
            if ( !argv.indexOf( 'textdomain' ) ) {
                const index = argv.search( '=' );
                this.textDomain = `'${ argv.slice( index + 1, argv.length ) }'`;
            }
        } );
    }
}

new Replace( process.argv );