import React, { Component } from 'react';

export default class List extends Component {
    render() {
        return (
            <div className="col-lg-8">
                <table className="shop-table cart">
                    <thead>
                    <tr>
                        <th  className="product-name">Product</th>
                        <th className="product-price">Description</th>
                        <th className="product-price">Price</th>
                        <th className="product-quantity">Qty</th>
                        <th className="product-subtotal">Status</th>
                        <th className="product-remove">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td className="product-thumbnail"><img src="{{ asset('/images/img1.jpg') }}" alt="shop-1"/></td>

                        <td className="product-name">
                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor</a>
                        </td>
                        <td>£58.00</td>
                        <td><input className="qty" type="text" value="+1"/></td>
                        <td style={{color: 'red', fontWeight: 'bold'}}>cancel</td>
                        <td className="product-remove"><a href="#"><i className="fa fa-close"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        );
    }
}
