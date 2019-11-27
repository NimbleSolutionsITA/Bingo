import React, { Component } from 'react';
import axios from 'axios';
import Card from "./Card";

class Cards extends Component {
    constructor (props) {
        super(props);
        this.state = {
            cards: [{}]
        }
    }

    componentDidMount () {
        axios.get('/api/cards/' + this.props.gameid).then(response => {
            this.setState({
                cards: response.data
            })
        })
    }

    render () {
        const cards = this.state.cards.map((item, key) =>
            <Card key={key} item={item} gameid={this.props.gameid}/>
        );
        return (
            <>
                <h5>Seleziona una scheda</h5>
                <div className='row'>
                    {cards}
                </div>
            </>
        );
    }
}

export default Cards;
