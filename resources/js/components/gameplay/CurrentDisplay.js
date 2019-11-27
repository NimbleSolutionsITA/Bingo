import React, { Component } from 'react';

class CurrentDisplay extends Component {
    constructor (props) {
        super(props);
    }

    render () {
        return (
            <>
                <h1>{this.props.sequence ? this.props.sequence[0] : 0}</h1>
            </>
        );
    }
}

export default CurrentDisplay;
