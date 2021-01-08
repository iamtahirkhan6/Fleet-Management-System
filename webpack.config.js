const path = require('path');

module.exports = {
    mode: 'none',
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        },
    },
};
