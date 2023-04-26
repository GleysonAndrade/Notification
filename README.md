# Email notification library using phpMailer

This library has the function to send email using the phpmailer library. Doing this action in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require gleys/notification
```

To make use of the library, just request composer's autoload, invoke the class and call the method:

```sh
<?php

requires __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your password", "secure smtp (tls/ssl)", "port (587)",
    "from@email.com", "From name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic constructor method! Once the developer's method is invoked within your application, your system will be able to train the triggers.

### Developers
* [Gleyson Dev] - Developer of this library and tutor of the Composer na Practical course!
* [phpMailer] - Lib to send email

License
----

MIT

**Another UpInside Training course, put it to good use!**

[//]:#
[Gleyson Dev]: <mailto:gleysondev@yahoo.com>