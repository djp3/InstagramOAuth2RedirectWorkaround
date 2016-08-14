# InstagramOAuth2RedirectWorkaround

This is the code associated with the workaround shown in this YouTube video:
https://youtu.be/OnHFYDQjN4E

Recently (about June 19, 2016) Instagram changed the way OAuth clients registered for the use of Instagram's API.   The particular change that this video above addresses was that Instagram only allows http or http redirects after correctly authenticating to Instagram's services.  This breaks a technique on mobile devices which leveraged non-http(s) protocols to get a call back.  

For example if you registered a URL of "myscheme://www.mysite.com" as the redirect link on Instagram's developer portal, then an iOS device could be configured to associate that scheme with a particular app.   Since Safari handles "http" and "https" there was no way for a custom application to get a callback from Instagram based on the custom scheme pattern once Instagram only allowed http and https redirects.

In the video I describe how to work around this restriction when using iOS and the NXOAuth2 Cocoapod.  It is addressing an assignment that was posted on Coursera's "Networking and Security in iOS Applications" that no longer works as a result of the change.  Nonetheless, the technique is probably relevant to others as well.

This is a link to the Coursera course:
https://www.coursera.org/learn/security

This is a link to the github repository and the php code mentioned in the tutorial:
https://github.com/djp3/InstagramOAuth2RedirectWorkaround
