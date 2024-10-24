function Form() {
  return (
    <>
      <form className="form">
        <div className="form-group">
          <label htmlFor="eventName">Name Event</label>
          <input type="text" id="eventName" name="eventName" placeholder="Enter event name" />
        </div>
        <div className="form-group">
          <label htmlFor="description">Description</label>
          <textarea id="description" name="description" placeholder="Describe the event"></textarea>
        </div>
        <div className="form-group">
          <label htmlFor="date">Date</label>
          <input type="date" id="date" name="date" />
        </div>
        <div className="form-group">
          <label htmlFor="time">Time</label>
          <input type="time" id="time" name="time" />
        </div>
        <div className="form-group">
          <label htmlFor="location">Location</label>
          <input type="text" id="location" name="location" placeholder="Enter event location" />
        </div>
        <button type="submit" className="submit-btn">Submit Event</button>
      </form>
    </>
  );
}

export default Form;