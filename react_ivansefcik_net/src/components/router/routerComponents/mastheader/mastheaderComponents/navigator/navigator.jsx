import React from 'react'
import PropTypes from 'prop-types';
import { Link } from 'react-router-dom';
import routes from '../../../../../../shared/routes';
import './navigator.css';

const Navigator = props => {
    return (
        <div className="navigator__container">
            <nav>
                <ul className="navigator__routes">
                    <li className="navigator__route"><Link to={routes.home}>Home</Link></li>
                    <li className="navigator__route current"><Link to={routes.gallery}>Gallery</Link></li>
                    <li className="navigator__route"><Link to={routes.about}>About</Link></li>
                    <li className="navigator__route"><Link to={routes.contact}>Contact</Link></li>
                </ul>
            </nav>
        </div>
    )
}
 Navigator.propTypes = {

};

export default Navigator;
