import React, { Component } from 'react';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import Cards from './Cards';
import Gameplay from "./Gameplay";

class Game extends Component {
    constructor (props) {
        super(props);
    }

    render () {
        return (
            <Router>
                <>
                    <Switch>
                        <Route exact path={'/games/' + this.props.gameid } component={() => <Cards gameid={this.props.gameid}/>} />
                        <Route exact path={'/games/' + this.props.gameid + '/play' } component={() => <Gameplay gameid={this.props.gameid}/>} />
                    </Switch>
                </>
            </Router>
        );
    }
}

export default Game;

