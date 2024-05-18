Proxy is a structural design pattern that provides an object that acts as a substitute for a real service object used by a client. A proxy receives client requests, does some work (access control, caching, etc.) and then passes the request to a service object.

The proxy object has the same interface as a service, which makes it interchangeable with a real object when passed to a client.


In the proxy pattern one class stands in for and handles all access to another class.

This can be because the real subject is in a different location (server, platform, etc), the real subject is cpu or memory intensive to create and is only created if necessary, or to control access to the real subject. A proxy can also be used to add additional access functionality, such as recording the number of times the real subject is actually called.

Identification: Proxies delegate all of the real work to some other object. Each proxy method should, in the end, refer to a service object unless the proxy is a subclass of a service.

https://refactoring.guru/design-patterns/proxy/php/example#example-0

Caching,
Access control,
Logging access to real object

