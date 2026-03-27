<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'app' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */

            'credentials' => [
                'type' => 'service_account',
                'project_id' => 'squadflow-e4d4a',
                'private_key_id' => '8e0b1338395666548e1f37e623fe2f418e2c42b3',
                'private_key' => "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDIyHQaXVDXMBib\naa7KiX5k9iF6LW2BOcRKrLkN0Y5TzpeL4rBcV8xBVWRhEwC3fHp7zQ+316oVC3m3\nElthSD1Iaov9oUzGC2bTE59aMDXyn5UUgrlbRg5bIPfy9iyhB7Ftv/w0uup1eqBP\njO+E1tF3UdXYE93/xPUc0i6aWHkBJavC56y/W3+f2Erqwi0iA+uDJaM70q3FBZIR\nzppaQEgf1Gnce0OUp5rMvYjVtvckGrR8pxTAsltaEXtKgWB5rkcsZcF/5KFa/tNx\nc9vYEfYgM3gMb5/sOKKdYDWIkrJW/eH7R7j7ZxvYwM7qRe+9KCOhr96ZzuR6kWwe\nLbk8b6btAgMBAAECggEAHaCKlUtYvvAPaXteOe+w8WfqR7OFWZCzGMvE4Lef11kA\nPrl8CZxA/REDJ1nc/LZHApafL6MIq2NOmgeA6Wl19YYXUx0mjYCoMxRNqsq7YypO\nHsEtZb0AKE1EmRrfOgG/GjE+n29HYn9uQV7MBx+FuCQguGoyE2g2PQL8snTEojjw\nZzNolNA7j8T9BugLJVDP4g2ZuOMVpi8cJp8Y1fkCh2OSxsPgQv2VvC/+NzBlMUL9\n0td/hWlP7Xsh13hZnFzCQ4BmJm9kFUEzC6K+aSWq39RufKQm0tEhUR3K3NEvaWcl\nR2RmfPWI1U1bDNn/bps4OZro8tZBGydC6P3tcJW3dwKBgQDjc6IfKEvISzWvw+TD\nFc1z89fxHBWCt0OmhNhA1Jxbwt5iYV9LAExqUnUOk2AqPw3OvNATQyf9icbpUVcL\nHhWzw3DZHa3891zBP9+xGaugLMICaGnN3Uzbx+W0E5u/J0l24xs4pXAUXb11Hs/I\nhA1WFzFygs44sDRIhJrvLcBdQwKBgQDh++pgCecp9/sfF6Q4NEQzbHrMF/YRwJxH\n62HeL5ioyDlUoBZD+d4/X9TPQbouLRb7K3sVo1+vJ7bfd9fiKHtEh2wEAwgGJbvE\nh0ZqrVl7nv0UP1GPAT/SlMA/VurYl7Z3EnbddKiwp+RNfjAPdiHqSAFTfZcq2Lcd\n2UUbtfIQDwKBgCxXFnvMdzmMr+Kb5bTCQ1MfbjFqsCbTYzTLIP1CdVjOHFxBbzpH\nzJ3NhVRaFp0lvaNX25hltx4OBeDmInngW4q3xwAMcSanckWaFhmIT5TiJNAjWrzv\nL1SJG5aHXA1fs0qh62SXm8ncnFqArzD/zTnDO7h/F4SllQuuDiYiXSXRAoGBALKx\nLn1Ol1naWtoVKae/vIYlK1yjPdJ/yZQdDkBQxpf/60V9aN3LgO//6RkR0hSdVuS5\nVxSfIRQxhStjanPMqtxfcQwjEX866yTWCtpjxLQ53cja4LUBuePb98CeDAnEvWWe\nVht7GcDGoYKdW4d+VAcbdOD+GECrKPETUtA8qPIFAoGBAJNDb8Ds+p3LaqcNNlDl\nCxEPJtyIUFrgh1rrUwlo7HhIprf9tudVXlCxoWwDnR7PAgUbncKrpXOX2MolTebQ\n7SpMBoGzuVhRbrvhYIQSu55x/p0L9g4IAuPDx/jHBswkDSzF3kdV4/Vasa4+aoSY\n2cQNRZgL8q0Nt6maAGxxhBeC\n-----END PRIVATE KEY-----\n",
                "client_email" => "firebase-adminsdk-fbsvc@squadflow-e4d4a.iam.gserviceaccount.com",
                'client_id' => '109068124069306967041',
                'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
                'token_uri' => 'https://oauth2.googleapis.com/token',
                'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
                'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-fbsvc%40squadflow-e4d4a.iam.gserviceaccount.com',
                'universe_domain' => 'googleapis.com',
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firestore Component
             * ------------------------------------------------------------------------
             */

            'firestore' => [

                /*
                 * If you want to access a Firestore database other than the default database,
                 * enter its name here.
                 *
                 * By default, the Firestore client will connect to the `(default)` database.
                 *
                 * https://firebase.google.com/docs/firestore/manage-databases
                 */

                // 'database' => env('FIREBASE_FIRESTORE_DATABASE'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/beste/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [
                    // MyInvokableMiddleware::class,
                    // [MyMiddleware::class, 'static_method'],
                ],
            ],
        ],
    ],
];
