import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Link } from 'react-router-dom';

import {   
    NavLink,
    HashRouter
} from "react-router-dom";
import Home from "./Home";
import Stuff from "./Stuff";
import Contact from "./Contact";

/* An example React component */
class Main extends Component {
    render() {
        return (
            <BrowserRouter>
        <div>
          <h1>Simple SPA</h1>
          <ul className="header">
                        <li><Link to="/">Home</Link></li>
                        <li><Link to="/stuff">Stuff</Link></li>
                        <li><Link to="/contact">Contact</Link></li>
          </ul>
          <div className="content">
            <Route path="/" component={Home}/>
            <Route path="/stuff" component={Stuff}/>
            <Route path="/contact" component={Contact}/>
          </div>
        </div>
            </BrowserRouter>
            
        );
    }
}

export default Main;

/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";  
*/

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}