import React, { Component } from 'react';

class CardDisplay extends Component {
    constructor (props) {
        super(props);
    }
    renderRow(row) {
        row = row ? row : [];
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
                <div className="card">
                    <div className="card-header">Scheda #{this.props.card.id}</div>
                    <div className="card-body">
                        <table className="cartella">
                            <tbody>
                                {this.renderRow(this.props.card.row1)}
                                {this.renderRow(this.props.card.row2)}
                                {this.renderRow(this.props.card.row3)}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default CardDisplay;
