import React, { Component } from 'react';

class NumbersDisplay extends Component {
    constructor (props) {
        super(props);
    }

    createTable = () => {
        let table = []

        // Outer loop to create parent
        for (let i = 0; i < 9; i++) {
            let children = [];
            //Inner loop to create children
            for (let j = 0; j < 10; j++) {
                children.push(<td key={`${(j + 1)+(10 * i)}`}><span>{`${(j + 1)+(10 * i)}`}</span></td>)
            }
            //Create the parent and add the children
            table.push(<tr key={i}>{children}</tr>)

        }
        return table
    }

    render () {
        return (
            <div className="numbers-display">
                <table>
                    <thead><tr><th>Tabellone</th></tr></thead>
                    <tbody>
                        {this.createTable()}
                    </tbody>
                </table>

            </div>
        );
    }
}

export default NumbersDisplay;
