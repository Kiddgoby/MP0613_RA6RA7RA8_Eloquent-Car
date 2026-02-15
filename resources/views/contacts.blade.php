@extends('layouts.master')

@section('title', 'Contact Us')

@section('main')

<section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 60px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-size: 3rem; margin-bottom: 20px; font-weight: bold;">Contact Us</h1>
        <p style="font-size: 1.15rem; max-width: 700px; margin: 0 auto;">We'd love to hear from you. Get in touch with our team for any questions or inquiries.</p>
    </div>
</section>

<section style="padding: 60px 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 40px;">
                <div style="padding: 40px; background: #f8f9fa; border-radius: 10px; height: 100%;">
                    <h2 style="font-size: 1.8rem; margin-bottom: 30px; color: #333;">Get In Touch</h2>
                    
                    <div style="margin-bottom: 30px;">
                        <h3 style="font-size: 1.1rem; color: #667eea; margin-bottom: 10px;">📞 Phone</h3>
                        <p style="color: #666; font-size: 1rem;">+1 (555) 123-4567</p>
                        <p style="color: #666; font-size: 1rem;">Mon - Fri: 8:00 AM - 6:00 PM</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h3 style="font-size: 1.1rem; color: #667eea; margin-bottom: 10px;">📧 Email</h3>
                        <p style="color: #666; font-size: 1rem;">support@elitecarrentals.com</p>
                        <p style="color: #666; font-size: 1rem;">info@elitecarrentals.com</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h3 style="font-size: 1.1rem; color: #667eea; margin-bottom: 10px;">📍 Location</h3>
                        <p style="color: #666; font-size: 1rem;">123 Auto Drive</p>
                        <p style="color: #666; font-size: 1rem;">New York, NY 10001</p>
                        <p style="color: #666; font-size: 1rem;">United States</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h3 style="font-size: 1.1rem; color: #667eea; margin-bottom: 10px;">🕐 Hours</h3>
                        <p style="color: #666; font-size: 1rem;">Monday - Friday: 8:00 AM - 8:00 PM</p>
                        <p style="color: #666; font-size: 1rem;">Saturday: 9:00 AM - 6:00 PM</p>
                        <p style="color: #666; font-size: 1rem;">Sunday: 10:00 AM - 4:00 PM</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="margin-bottom: 40px;">
                <div style="padding: 40px; background: #f8f9fa; border-radius: 10px;">
                    <h2 style="font-size: 1.8rem; margin-bottom: 30px; color: #333;">Send us a Message</h2>
                    
                    <form style="display: flex; flex-direction: column; gap: 20px;">
                        <div>
                            <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 500;">Full Name</label>
                            <input type="text" placeholder="Your Name" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 500;">Email Address</label>
                            <input type="email" placeholder="your@email.com" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 500;">Phone Number</label>
                            <input type="tel" placeholder="+1 (555) 123-4567" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 500;">Subject</label>
                            <input type="text" placeholder="How can we help?" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 500;">Message</label>
                            <textarea placeholder="Your message here..." rows="5" style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; font-family: inherit;"></textarea>
                        </div>

                        <button type="submit" style="padding: 12px 30px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 5px; font-size: 1rem; font-weight: 500; cursor: pointer; transition: transform 0.2s;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding: 60px 20px; background-color: #f8f9fa;">
    <div class="container">
        <h2 style="text-align: center; font-size: 2rem; margin-bottom: 50px; color: #333;">Why Contact Us?</h2>
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 40px;">
                <div style="padding: 30px; background: white; border-radius: 10px; border-left: 5px solid #667eea;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: #333;">❓ Questions About Rentals</h3>
                    <p style="color: #666; line-height: 1.6;">Have questions about our vehicles, pricing, or rental terms? Our experts are here to help you find the perfect solution.</p>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 40px;">
                <div style="padding: 30px; background: white; border-radius: 10px; border-left: 5px solid #667eea;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: #333;">🛠️ Technical Support</h3>
                    <p style="color: #666; line-height: 1.6;">Experiencing issues with our website or booking system? We're ready to assist you immediately.</p>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 40px;">
                <div style="padding: 30px; background: white; border-radius: 10px; border-left: 5px solid #667eea;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: #333;">💼 Business Inquiries</h3>
                    <p style="color: #666; line-height: 1.6;">Interested in corporate partnerships or fleet rentals? Let's discuss how we can work together.</p>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 40px;">
                <div style="padding: 30px; background: white; border-radius: 10px; border-left: 5px solid #667eea;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: #333;">⭐ Feedback & Suggestions</h3>
                    <p style="color: #666; line-height: 1.6;">We value your feedback! Share your experience and help us improve our services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 60px 20px; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2rem; margin-bottom: 20px;">Need Immediate Assistance?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">Call our support team at <strong>+1 (555) 123-4567</strong> or email us at <strong>support@elitecarrentals.com</strong></p>
        <p style="font-size: 0.95rem;">Available 24/7 for emergencies</p>
    </div>
</section>

@endsection