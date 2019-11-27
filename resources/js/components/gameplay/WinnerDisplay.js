import React, { Component } from 'react';

class WinnerDisplay extends Component {
    constructor (props) {
        super(props);
    }

    render () {
        return (
            <>
                <p>{this.props.type}: {this.props.winner}</p>
            </>
        );
    }
}

export default WinnerDisplay;
