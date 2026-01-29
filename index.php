<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Form Validation</title>
</head>

<body>
    <h1>PHP Form Validation</h1>
    <form action="validate.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="date">Date:</label>
        <input type="date" name="date" id="date">
        <label for="dateInput">Date Input:</label>
        <input type="text" name="dateInput" id="dateInput">
        <label for="time">Time:</label>
        <input type="time" name="time" id="time">
        <label for="timeInput">Time Input:</label>
        <input type="text" name="timeInput" id="timeInput">
        <label for="datetimeInput">Datetime Input:</label>
        <input type="datetime" name="datetimeInput" id="datetimeInput">
        <label for="datetimeLocalInput">Datetime Local Input:</label>
        <input type="datetime-local" name="datetimeLocalInput" id="datetimeLocalInput">
        <label for="month">Month:</label>
        <input type="month" name="month" id="month">
        <label for="week">Week:</label>
        <input type="week" name="week" id="week">
        <label for="number">Number:</label>
        <input type="number" name="number" id="number">
        <label for="range">Range:</label>
        <input type="range" name="range" id="range">
        <label for="color">Color:</label>
        <input type="color" name="color" id="color">
        <label for="search">Search:</label>
        <input type="search" name="search" id="search">
        <label for="tel">Tel:</label>
        <input type="tel" name="tel" id="tel">
        <label for="url">Url:</label>
        <input type="url" name="url" id="url">
        <label for="file">File:</label>
        <input type="file" name="file" id="file">
        <label for="checkbox">Checkbox:</label>
        <input type="checkbox" name="checkbox" id="checkbox">
        <label for="radio">Radio:</label>
        <input type="radio" name="radio" id="radio">
        <label for="select">Select:</label>
        <select name="select" id="select">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
        </select>
        <label for="textarea">Textarea:</label>
        <textarea name="textarea" id="textarea"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>

</html>