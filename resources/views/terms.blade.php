@extends('layouts.app')
@section('title', 'Terms of Service')
@section('nav-links')
    <a class="text-gray-400 hover:text-white transition-colors font-['Space_Grotesk'] font-bold tracking-tight" href="/">Home</a>
@endsection
@section('content')
<main class="pt-32 pb-24 px-6">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-16">
            <span class="inline-block px-4 py-1 rounded-full bg-secondary/10 text-secondary font-bold text-xs uppercase tracking-widest mb-6">Legal</span>
            <h1 class="text-4xl lg:text-6xl font-black font-headline tracking-tighter mb-6">TERMS OF <span class="text-secondary italic" style="text-shadow: 0 0 20px rgba(214,116,255,0.4);">SERVICE</span></h1>
            <p class="text-on-surface-variant text-lg">Last updated: March 24, 2026</p>
        </div>
        <!-- Content -->
        <div class="space-y-12">
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">1. Acceptance of Terms</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    By accessing or using {{ config('app.name') }} (the "Service"), you agree to be bound by these Terms of Service ("Terms"). If you do not agree to these Terms, you may not access or use the Service. We reserve the right to update these Terms at any time, and your continued use of the Service constitutes acceptance of any changes.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">2. Description of Service</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    {{ config('app.name') }} is a manual achievement logging, timeline visualization, and gaming session scheduling platform designed for gaming squads. The Service allows users to:
                </p>
                <ul class="space-y-3 text-on-surface-variant">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>Create and manage gaming squads</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>Manually log achievements, milestones, and gaming progress</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>View a shared timeline of squad achievements</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>Schedule gaming sessions and manage event attendance</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-lg mt-0.5">chevron_right</span>
                        <span>Access analytics and performance statistics</span>
                    </li>
                </ul>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">3. Account Registration</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    To use certain features of the Service, you must create an account. You agree to:
                </p>
                <ul class="space-y-3 text-on-surface-variant">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">chevron_right</span>
                        <span>Provide accurate, current, and complete information during registration</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">chevron_right</span>
                        <span>Maintain and promptly update your account information</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">chevron_right</span>
                        <span>Keep your password secure and confidential</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-secondary text-lg mt-0.5">chevron_right</span>
                        <span>Accept responsibility for all activities that occur under your account</span>
                    </li>
                </ul>
                <p class="text-on-surface-variant leading-relaxed">
                    You must be at least 13 years of age to create an account and use the Service.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">4. User Content</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    You retain ownership of all content you submit to the Service, including achievement logs, screenshots, comments, and profile information ("User Content"). By submitting User Content, you grant {{ config('app.name') }} a non-exclusive, worldwide, royalty-free license to use, display, and distribute your User Content solely for the purpose of operating and improving the Service.
                </p>
                <p class="text-on-surface-variant leading-relaxed">
                    You are solely responsible for your User Content. You agree not to submit content that is illegal, offensive, defamatory, or infringes on the rights of others.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">5. Acceptable Use</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    You agree not to use the Service to:
                </p>
                <ul class="space-y-3 text-on-surface-variant">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">block</span>
                        <span>Violate any applicable laws, regulations, or third-party rights</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">block</span>
                        <span>Harass, bully, threaten, or intimidate other users</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">block</span>
                        <span>Distribute spam, malware, or other harmful content</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">block</span>
                        <span>Attempt to gain unauthorized access to other accounts or systems</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">block</span>
                        <span>Interfere with or disrupt the integrity or performance of the Service</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-tertiary text-lg mt-0.5">block</span>
                        <span>Impersonate another person or entity</span>
                    </li>
                </ul>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">6. Intellectual Property</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    The Service and its original content (excluding User Content), features, and functionality are and will remain the exclusive property of {{ config('app.name') }} and its licensors. The Service is protected by copyright, trademark, and other laws. Our trademarks and trade dress may not be used in connection with any product or service without prior written consent.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">7. Termination</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We may terminate or suspend your account and access to the Service immediately, without prior notice or liability, for any reason, including if you breach these Terms. Upon termination, your right to use the Service will immediately cease.
                </p>
                <p class="text-on-surface-variant leading-relaxed">
                    You may delete your account at any time through the app settings. Upon account deletion, we will remove your personal data in accordance with our <a href="{{ route('privacy') }}" class="text-primary hover:underline">Privacy Policy</a>.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">8. Disclaimer of Warranties</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    The Service is provided on an "AS IS" and "AS AVAILABLE" basis without any warranties of any kind, either express or implied, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We do not warrant that the Service will be uninterrupted, secure, or error-free.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">9. Limitation of Liability</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    To the maximum extent permitted by applicable law, in no event shall {{ config('app.name') }}, its directors, employees, partners, agents, suppliers, or affiliates be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your access to or use of (or inability to access or use) the Service.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">10. Governing Law</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    These Terms shall be governed and construed in accordance with the laws of the Netherlands, without regard to its conflict of law provisions. Any disputes arising from these Terms or the Service shall be resolved in the competent courts of the Netherlands.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">11. Changes to Terms</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    We reserve the right to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion. By continuing to access or use the Service after revisions become effective, you agree to be bound by the revised Terms.
                </p>
            </section>
            <section class="bg-surface-container rounded-lg p-8 lg:p-10 space-y-4">
                <h2 class="text-2xl font-bold font-headline text-secondary">12. Contact Us</h2>
                <p class="text-on-surface-variant leading-relaxed">
                    If you have any questions about these Terms, please contact us at:
                </p>
                <div class="bg-surface-container-low rounded-md p-6 border border-outline-variant/10">
                    <p class="text-on-surface font-bold font-headline text-lg mb-2">{{ config('app.name') }} Legal Team</p>
                    <p class="text-on-surface-variant">Email: legal@squadflow.app</p>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
