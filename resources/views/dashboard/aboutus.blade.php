@extends('layouts.main')

@section('content')
  <style>
    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      color: #333;
    }

    header {
      text-align: center;
      margin-bottom: 30px;
      padding: 20px;

    }

    section {
      max-width: 800px;
      margin: 0 auto;
      padding: 30px;
    }

    h2 {
      color: #007BFF;
    }

    p {
      margin-bottom: 20px;
    }

    .highlight {
      font-weight: bold;
      color: #17A2B8;
    }
  </style>
  <header>
    <h1 style= "color:var(--secondar, rgba(159, 9, 9, 0.92));">About Us</h1>
    <p>Best Place For Your Khukuri</p>
  </header>

  <section>
    <h2>Our Story</h2>
    <p>Welcome to KHUKURI HOUSE, where we combine passion and expertise to [briefly describe your mission or purpose]. Founded in [year], we have been on a journey to [describe your company's evolution, growth, or milestones]. Our commitment to [core values] has been the driving force behind our success.</p>

    <h2>Our Team</h2>
    <p>At KHUKURI HOUSE, we are proud of our diverse and talented team. Our professionals bring a wealth of experience in [industry-specific expertise], and their dedication is the cornerstone of our achievements. Get to know the faces behind our success.</p>

    <h2>Our Values</h2>
    <p>We believe in better quality. These values shape our culture, drive our decisions, and define our relationships with customers, partners, and each other. At [Your Company Name], we are committed to [specific commitments or goals related to your values]. </p>

    <h2>Why Choose Us?</h2>
    <p>What sets us apart is our unwavering commitment to [quality, innovation, customer satisfaction, etc.]. Here are some reasons to choose [Your Company Name]:</p>
    <ul>
      <li>We prioritize customer satisfaction.</li>
      <li>We stay ahead through continuous innovation.</li>
      <li>Our team is dedicated, experienced, and passionate.</li>
    </ul>

    <h2>Contact Us</h2>
    <p>We would love to hear from you! Feel free to [provide contact information or a link to your contact page] for inquiries, partnerships, or any other matter. Join us on our journey as we [mission or goal statement].</p>

  </section>
@endsection

