import PropTypes from 'prop-types';
import routes from '../../../../../../shared/routes';
import './watermarkLogo.css';

const WatermarkLogo = props => {
    return (
            <div className="watermark__logo__container">
                <a href={routes.home}>
                    <div className="watermark__logo" />
                </a>
            </div>
    )
};

WatermarkLogo.propTypes = {

};

export default WatermarkLogo;
