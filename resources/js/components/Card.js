import React, { Component } from 'react';
import './card.css';
import { Redirect } from 'react-router-dom';
import axios from "axios";

class Card extends Component {
    constructor (props) {
        super(props);
        this.state = {
           toGame: false
        };
        this.handleAddNewGamecard = this.handleAddNewGamecard.bind(this);
    }

    handleAddNewGamecard (event) {
        event.preventDefault();
        console.log('game id: ' + this.props.gameid);
        console.log('card id: ' + this.props.item.id);
        axios
            .post('/api/gamecards', { game_id: this.props.gameid, card_id: this.props.item.id })
            .then(response => { this.setState({ toGame: response.data.result });
                console.log(response.data.result)
            })
            .catch(error => console.log(error))
    };

    renderRow(row) {
        row = row ? row : [];
        if (this.state.toGame === true) {
            return <Redirect to={'/games/' + this.props.gameid + '/play'} />
        }
        return (
            <tr>
                <td>{row.filter(function (value) {
                    return value >= 0 && value < 10
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 10 && value < 20
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 20 && value < 30
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 30 && value < 40
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 40 && value < 50
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 50 && value < 60
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 60 && value < 70
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 70 && value < 80
                })}</td>
                <td>{row.filter(function (value) {
                    return value >= 80 && value <= 90
                })}</td>
            </tr>
        )
    };

    render () {
        return (
            <div className="col-xs-3">
                <form onSubmit={this.handleAddNewGamecard}>
                    <button>
                        <div className="card">
                            <div className="card-header">Scheda #{this.props.item.id}</div>
                            <div className="card-body">
                                <table className="cartella">
                                    <tbody>
                                    {this.renderRow(this.props.item.row1)}
                                    {this.renderRow(this.props.item.row2)}
                                    {this.renderRow(this.props.item.row3)}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </button>
                </form>

            </div>
        );
    }
}

export default Card;
