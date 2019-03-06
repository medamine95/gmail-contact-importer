import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Example extends Component {

    constructor(){

        super();
        this.state={
            persons:'',
            output:[]
        }
    }

    componentDidMount(){
        axios.get('/postdata').then(response=>
            {
        this.setState({persons:response.data});
        const itemsArray = this.state.persons.split(',');
        this.setState({
            output:itemsArray
        });
    });

}
    render() {

        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                            <ul className="list-group">{this.state.output.map(item=>(
                                <li className="list-group-item" key={item}>{item}</li>
                            ))}</ul>

                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
