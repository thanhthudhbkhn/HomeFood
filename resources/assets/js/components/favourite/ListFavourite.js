import React, { Component } from 'react';

export default class ListFavourite extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="col-lg-8 col-md-12 col-sm-12">
                <div className="my-properties">
                    <table className="table">
                        <thead>
                        <tr>
                            <th>Property</th>
                            <th></th>
                            <th>Date Added</th>
                            <th>Views</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td className="image">
                                    <a href="#"><img src="{{ asset('images/img1.jpg') }}" className="img-fluid"/></a>
                                </td>
                                <td>
                                    <div className="inner">
                                        <a href="#"><h2>Modern Family Home</h2></a>
                                        <figure><i className="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,</figure>
                                        <div className="tag price">$ 27,000</div>
                                    </div>
                                </td>
                                <td>14.02.2018</td>
                                <td>421</td>
                                <td className="actions">
                                    <a href="#" className="edit"><i className="fa fa-pencil"></i>Edit</a>
                                    <a href="#"><i className="delete fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div className="pagination-box">
                    <nav aria-label="Page navigation example">
                        <ul className="pagination">
                            <li className="page-item"><a className="page-link" href="#"><span aria-hidden="true">«</span></a></li>
                            <li className="page-item"><a className="page-link active" href="#">1</a></li>
                            <li className="page-item"><a className="page-link" href="#">2</a></li>
                            <li className="page-item"><a className="page-link" href="#">3</a></li>
                            <li className="page-item"><a className="page-link" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        );
    }
}
