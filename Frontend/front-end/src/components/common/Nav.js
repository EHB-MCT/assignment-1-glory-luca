import React from 'react';
import { Link } from 'react-router-dom';

const Nav = () => {
  return (
    <nav>
        <li>
          <Link to="/">HOME</Link>
        </li>
        <li>
          <Link to="/events">EVENTS</Link>
        </li>
    </nav>
  );
};

export default Nav;
