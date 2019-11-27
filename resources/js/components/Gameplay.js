import React, { Component } from 'react';
import NumbersDisplay from "./gameplay/NumbersDisplay";
import CurrentDisplay from "./gameplay/CurrentDisplay";
import WinnerDisplay from "./gameplay/WinnerDisplay";
import CardDisplay from "./gameplay/CardDisplay";
import axios from "axios";
import './gameplay/gameplay.css';

class Gameplay extends Component {
    constructor (props) {
        super(props);
        this.state = {
            game: {
                sequence: [0],
                ambo: 0,
                terna: 0,
                quaterna: 0,
                cinquina: 0,
                tomnbola: 0
            },
            card: {
                id: 0,
                row1: [],
                row2: [],
                row3: []
            }
        };
    }

    componentDidMount () {
        axios.get('/api/games/' + this.props.gameid).then(response => {
            this.setState({
                game: response.data.game,
                card: response.data.card
            });
        })
    }

    render () {
        return (
            <div className="row">
                <div className="col-md-6">
                    <NumbersDisplay sequence={this.state.game.sequence}/>
                </div>
                <div className="col-md-6">
                    <div className="row">
                        <div className="col-md-6">
                            <CurrentDisplay current={this.state.game.sequence}/>
                        </div>
                        <div className="col-md-6">
                            <WinnerDisplay type="ambo" winner={this.state.game.ambo}/>
                            <WinnerDisplay type="terna" winner={this.state.game.terna}/>
                            <WinnerDisplay type="quaterna" winner={this.state.game.quaterna}/>
                            <WinnerDisplay type="cinquina" winner={this.state.game.cinquina}/>
                            <WinnerDisplay type="tombola" winner={this.state.game.tombola}/>
                        </div>
                    </div>
                    <CardDisplay  card={this.state.card}/>
                </div>

            </div>
        );
    }
}

export default Gameplay;

