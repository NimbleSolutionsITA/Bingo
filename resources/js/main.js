import React from 'react'
import ReactDOM from 'react-dom';
import { BrowserRouter } from 'react-router-dom'
import Game from './components/Game'

if (document.getElementById('root')) {
    // find element by id
    const element = document.getElementById('root');

    // create new props object with element's data-attributes
    // result: {tsId: "1241"}
    const props = Object.assign({}, element.dataset);

    // render element with props (using spread)
    ReactDOM.render(
        <BrowserRouter>
            <Game {...props} />
        </BrowserRouter>
        , element);
}
