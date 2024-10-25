import React from 'react';

const Event = ({ name, description, date, time }) => {
  return (
    <div className="card">
      <h1>{name}</h1>
      <p>{description}</p>
      <div className="date-time">
        <h2>{date}</h2>
        <h2>{time}</h2>
      </div>
    </div>
  );
};

export default Event;