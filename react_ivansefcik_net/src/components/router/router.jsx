import React from 'react';
import {
    BrowserRouter as Router,
    Switch,
    Route,
} from 'react-router-dom';
import {
    Home,
    Gallery,
    AboutMe,
    Contact
} from '../pages';
import {Mastheader } from './routerComponents';
import routes from '../../shared/routes';

const RouterComponent = props => {
    return (
        <Router>
            <Mastheader />
            <Switch>
                <Route exact path={routes.home} component={Home} />
                <Route exact path={routes.gallery} component={Gallery} />
                <Route exact path={routes.about} component={AboutMe} />
                <Route exact path={routes.contact} component={Contact} />
                {/* <Route path="/404" component={Page404} /> */}
            </Switch>
        </Router>
    )
};

export default RouterComponent;