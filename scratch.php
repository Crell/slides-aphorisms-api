<?php

function engage_engine($engine_type) {
    switch ($engine_type) {
        case 'warp':
            // ...
            break;
        case 'hyperspace':
            // ...
            break;
        default:
            throw new UnsupportedSciFiException();
    }
}


function engage_engine($engine_type) {
    switch ($engine_type) {
        case 'warp':
            // ...
            break;
        case 'hyperspace':
            // ...
            break;
        case 'slipstream':
            // ...
            break;
        default:
            throw new UnsupportedSciFiException();
    }
}

function engage_engine(Engine $engine) {
    // ...
    $engine->engage();
}

const ENGINE_WARP = 1;
const ENGINE_HYPERSPACE = 2;

const ENGINE_SLIPSTREAM = 3;
const ENGINE_INFINITE_IMPROBABILITY = 3;

