import React, { Component } from 'react';
import axios from "axios";
import './gameplay.css';


class Gameplay extends Component {
    constructor (props) {
        super(props);
        this.state = {
            game: {
                id: this.props.gameid,
                sequence: ['attendi'],
                ambo: 0,
                terna: 0,
                quaterna: 0,
                cinquina: 0,
                tombola: 0,
                status: 'available'
            },
            card: {
                id: 0,
                row1: [],
                row2: [],
                row3: []
            }
        };
    }

    createTable = () => {
        let table = [];

        // Outer loop to create parent
        for (let i = 0; i < 9; i++) {
            let children = [];
            //Inner loop to create children
            for (let j = 0; j < 10; j++) {
                let isExtracted = false;
                if (typeof this.state.game.sequence !== 'undefined') {
                    if(this.state.game.sequence.includes((j + 1)+(10 * i)))
                        isExtracted = true;
                }
                children.push(<td key={(j + 1)+(10 * i)} className={`${isExtracted ? "extracted" : ""}`}><span>{(j + 1)+(10 * i)}</span></td>)
            }
            //Create the parent and add the children
            table.push(<tr key={i}>{children}</tr>)

        }
        return table
    };

    checkCell = event => {
        let value = event.currentTarget.textContent;
        if(this.state.game.sequence.includes(parseInt(value))) {
            $(event.currentTarget).addClass('extracted');
        }
    };

    renderRow(row) {
        row = row ? row : [];
        return (
            <tr>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 0 && value < 10
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 10 && value < 20
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 20 && value < 30
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 30 && value < 40
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 40 && value < 50
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 50 && value < 60
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 60 && value < 70
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 70 && value < 80
                })}</td>
                <td onClick={this.checkCell}>{row.filter(function (value) {
                    return value >= 80 && value <= 90
                })}</td>
            </tr>
        )
    };

    componentDidMount () {
        axios.get('/api/games/' + this.props.gameid).then(response => {
            this.setState({
                game:  {
                    id: response.data.game.id,
                    sequence: JSON.parse(response.data.game.sequence),
                    ambo: response.data.game.ambo,
                    terna: response.data.game.terna,
                    quaterna: response.data.game.quaterna,
                    cinquina: response.data.game.cinquina,
                    tombola: response.data.game.tombola,
                    status: response.data.game.status
                },
                card: response.data.card
            });
        });
        var channel =  Echo.channel('game' +  this.props.gameid);
        channel.listen('.game-updates', (data) => {
            this.setState({
                game:  {
                    id: data.game.id,
                    sequence: JSON.parse(data.game.sequence),
                    ambo: data.game.ambo,
                    terna: data.game.terna,
                    quaterna: data.game.quaterna,
                    cinquina: data.game.cinquina,
                    tombola: data.game.tombola,
                    status: data.game.status
                }
            });
        });
    }
    renderExtracted = () => {
        if(this.state.game.sequence[0] == 'attendi')
            return <p className="current-number">Attendi l'avvio della partita</p>;
        else return <div className="current-number">{this.state.game.sequence[0]}</div>;
    };

    handleWinnerClick () {
        axios.put('/api/games/' + this.props.gameid, this.state.card).then(response => {
            console.log(response.data);
        })
            .catch((err) => console.log(err));
    }

    render () {
        return (
            <div className="row">
                <div className="col-sm-8">
                    <div className="numbers-display">
                        <h2>Tabellone</h2>
                        <table>
                            <tbody>
                            {this.createTable()}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div className="col-sm-4">
                    <div className="row">
                        <div className="col-sm-12">
                            {this.renderExtracted()}
                        </div>
                        <div className="col-sm-12">
                            <table className={'winners'}>
                                <tbody>
                                    <tr><td>ambo: </td><td>{this.state.game.ambo}</td></tr>
                                    <tr><td>terna: </td><td>{this.state.game.terna}</td></tr>
                                    <tr><td>quaterna: </td><td>{this.state.game.quaterna}</td></tr>
                                    <tr><td>cinquina: </td><td>{this.state.game.cinquina}</td></tr>
                                    <tr><td>tombola: </td><td>{this.state.game.tombola}</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div className="col-sm-12">
                        <span>Cartella #{this.state.card.id}</span>
                        <table className="cartella">
                            <tbody>
                                {this.renderRow(this.state.card.row1)}
                                {this.renderRow(this.state.card.row2)}
                                {this.renderRow(this.state.card.row3)}
                            </tbody>
                        </table>
                        <button className="button-winner" onClick={() => this.handleWinnerClick()}>{this.state.game.status}</button>
                    </div>
                </div>

            </div>
        );
    }
}

export default Gameplay;

