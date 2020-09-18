const nodemailer = require("nodemailer")
var mailOptions = {
    from: "Big Dick Daddy Oh <1@2.com",
    to: "sincraft01@gmail.com",
    subject: "tits",
    text: "more tits",
    html: "<h1>TITS</h1>"
}
var smtpConfig = ({
    host: "31.220.59.131",
    port: 465,
    secure: true,
    auth: {
        user: "deleted@removed.site",
        pass: "Thc9001!"
    },
    tls: {
        rejectUnauthorized: false
     }

});
var transporter = nodemailer.createTransport(smtpConfig);
console.log('Transport Ready...')
transporter.verify((err,success) => {
    if (err) {
        console.error(err);
    }
    else {
        console.log("success", success)
    }
});

transporter.sendMail(mailOptions);