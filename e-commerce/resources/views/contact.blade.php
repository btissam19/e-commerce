@extends('layout')
@section('content')
<div class="contact">
    <form>
        <h1>Contact Us</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        <div class="submit"> <button type="submit" class="btn rounded-pill main-btn bg-info">submit</button></div>
    </form>
</div>
@endsection