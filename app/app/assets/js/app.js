/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

// start the Stimulus application
import { InertiaApp } from "@inertiajs/inertia-react";
import Homepage from "./homepage";
import React from 'react'
import ReactDOMServer from 'react-dom/server'
import { render } from "react-dom";

InertiaProgress.init()
const app = document.getElementById("app");

if (app) {
    render(<InertiaApp
        initialPage={JSON.parse(app.dataset.page)}
        resolveComponent={(name) => require(`./${name}`).default}
      />,
      app)
    ;
}