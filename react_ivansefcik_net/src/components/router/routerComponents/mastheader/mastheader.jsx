import PropTypes from 'prop-types';
import { Navigator, WatermarkLogo } from './mastheaderComponents';
import './mastheader.css';

const Mastheader = props => {
    return (
        <div className="mastheader__container">
            <WatermarkLogo />
            <Navigator />
        </div>
    )
}

Mastheader.propTypes = {
};

export default Mastheader;
