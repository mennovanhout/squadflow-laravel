@extends('layouts.app')
@section('title', 'Privacy Policy')
@section('nav-links')
    <a class="text-gray-400 hover:text-white transition-colors font-['Space_Grotesk'] font-bold tracking-tight" href="/">Home</a>
@endsection
@section('content')
<main class="pt-32 pb-24 px-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-16">
            <span class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest mb-6">Legal</span>
            <h1 class="text-4xl lg:text-6xl font-black font-headline tracking-tighter mb-6">PRIVACY <span class="text-primary italic text-glow">POLICY</span></h1>
            <p class="text-on-surface-variant text-lg">Last updated: March 24, 2026</p>
        </div>
        <!-- Content -->
        <div class="space-y-12">
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">1. Introduction</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    Welcome to {{ config('app.name') }} ("we," "our," or "us"). We are committed to protecting your personal information and your right to privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our mobile application and related services (collectively, the "Service").
                </p>
                <p class="text-on-surface-variant leading-relaxed">
                    Please read this privacy policy carefully. If you do not agree with the terms of this privacy policy, please do not access the Service.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">2. Information We Collect</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We collect information that you provide directly to us when using the Service:
                </p>
                <ul class="space-y-3 text-on-surface-variant">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Account Information:</strong> When you create an account, we collect your username, email address, and password.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Profile Information:</strong> You may optionally provide a display name, avatar, and gaming preferences.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Achievement Data:</strong> Achievements, milestones, session logs, and other content you manually enter into the Service.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Squad &amp; Event Data:</strong> Squad memberships, event RSVPs, session schedules, and related interactions.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Usage Data:</strong> We automatically collect device information, log data, and analytics to improve the Service.</span>
                    </li>
                </ul>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">3. How We Use Your Information</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We use the information we collect for the following purposes:
                </p>
                <ul class="space-y-3 text-on-surface-variant">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>To provide, operate, and maintain the Service</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>To manage your account and provide customer support</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>To enable squad features, event scheduling, and achievement tracking</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>To send you session reminders, notifications, and updates you have opted into</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>To analyze usage trends and improve the Service</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>To detect, prevent, and address technical issues or abuse</span>
                    </li>
                </ul>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">4. Sharing of Information</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We do not sell your personal information. We may share your information in the following limited circumstances:
                </p>
                <ul class="space-y-3 text-on-surface-variant">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">With Your Squad:</strong> Your profile, achievements, and event participation are visible to members of your squad.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Service Providers:</strong> We may share data with third-party vendors who assist us in operating the Service (e.g., hosting, analytics).</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Legal Requirements:</strong> We may disclose information if required by law or in response to valid legal requests.</span>
                    </li>
                </ul>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">5. Data Security</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We implement appropriate technical and organizational security measures to protect your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your data, we cannot guarantee absolute security.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">6. Data Retention</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We retain your personal information for as long as your account is active or as needed to provide the Service. You may request deletion of your account and associated data at any time by contacting us. We will delete or anonymize your information within 30 days of such a request, unless we are legally required to retain it.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">7. Your Rights</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    Depending on your location, you may have the following rights regarding your personal data:
                </p>
                <ul class="space-y-3 text-on-surface-variant">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Access:</strong> Request a copy of the personal data we hold about you.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Correction:</strong> Request that we correct inaccurate or incomplete data.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Deletion:</strong> Request that we delete your personal data.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Portability:</strong> Request a portable copy of your data in a structured format.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">chevron_right</span>
                        <span><strong class="text-on-surface">Opt-Out:</strong> Opt out of non-essential communications at any time.</span>
                    </li>
                </ul>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">8. Children's Privacy</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    The Service is not intended for children under the age of 13. We do not knowingly collect personal information from children under 13. If we become aware that we have collected data from a child under 13, we will take steps to delete such information promptly.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">9. Changes to This Policy</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last updated" date. You are advised to review this Privacy Policy periodically for any changes.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-primary">10. Contact Us</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    If you have any questions about this Privacy Policy or our data practices, please contact us at:
                </p>
                <div class="bg-surface-container-low rounded-md p-6 border border-outline-variant/10">
                    <p class="text-on-surface font-bold font-headline text-lg mb-2">{{ config('app.name') }} Privacy Team</p>
                    <p class="text-on-surface-variant">Email: privacy@squadflow.app</p>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
