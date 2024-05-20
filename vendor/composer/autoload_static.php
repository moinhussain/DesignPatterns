<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d05b5928556029f33892f19590b1ff3
{
    public static $classMap = array (
        'AbstractBook' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/Conceptual/AbstractBook.php',
        'AbstractBookFactory' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/Conceptual/AbstractBookFactory.php',
        'AbstractListingFactory' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/AbstractListingFactory.php',
        'AbstractMysqlBook' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/Conceptual/AbstractMysqlBook.php',
        'AbstractPHPBook' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/Conceptual/AbstractPHPBook.php',
        'Adaptee' => __DIR__ . '/../..' . '/src/Structural/Adapter/Adaptee.php',
        'Adapter' => __DIR__ . '/../..' . '/src/Structural/Adapter/Adapter.php',
        'AlphabetIterator' => __DIR__ . '/../..' . '/src/Behavioral/Iterator/AlphabetIterator.php',
        'BookBorrower' => __DIR__ . '/../..' . '/src/Creational/Singleton/Conceptual/BookBorrower.php',
        'BookSingleton' => __DIR__ . '/../..' . '/src/Creational/Singleton/Conceptual/Client2.php',
        'Channel' => __DIR__ . '/../..' . '/src/Behavioral/Observer/Channel.php',
        'ClosedGateState' => __DIR__ . '/../..' . '/src/Behavioral/State/ClosedGateState.php',
        'Context' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example2/Context.php',
        'CustomShippingProfile' => __DIR__ . '/../..' . '/src/Creational/FactoryPattern/CustomShippingProfile.php',
        'DangerousHTMLTagsFilter' => __DIR__ . '/../..' . '/src/Structural/Decorator/DangerousHTMLTagsFilter.php',
        'DefaultListingFactory' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/DefaultListingFactory.php',
        'DependencyInversion\\After\\Mailer1' => __DIR__ . '/../..' . '/src/Solid/DependencyInversion/After/Mailer1.php',
        'DependencyInversion\\After\\Mailer2' => __DIR__ . '/../..' . '/src/Solid/DependencyInversion/After/Mailer2.php',
        'DependencyInversion\\After\\MailerInterface' => __DIR__ . '/../..' . '/src/Solid/DependencyInversion/After/MailerInterface.php',
        'DependencyInversion\\After\\UserRegistration' => __DIR__ . '/../..' . '/src/Solid/DependencyInversion/After/UserRegistration.php',
        'DigitalListingFactory' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/DigitalListingFactory.php',
        'Director' => __DIR__ . '/../..' . '/src/Creational/BuilderDesignPattern/Director.php',
        'DomesticEddBuilder' => __DIR__ . '/../..' . '/src/Creational/BuilderDesignPattern/DomesticEddBuilder.php',
        'Duck' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/Duck.php',
        'EddBuilder' => __DIR__ . '/../..' . '/src/Creational/BuilderDesignPattern/EddBuilder.php',
        'EstimatedDeliveryDate' => __DIR__ . '/../..' . '/src/Creational/BuilderDesignPattern/EstimatedDeliveryDate.php',
        'Gate' => __DIR__ . '/../..' . '/src/Behavioral/State/Gate.php',
        'GateState' => __DIR__ . '/../..' . '/src/Behavioral/State/GateState.php',
        'IBookParser' => __DIR__ . '/../..' . '/src/Structural/Proxy/IBookParser.php',
        'ICommand' => __DIR__ . '/../..' . '/src/Behavioral/Command/ICommand.php',
        'IFlyStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/IFlyStrategy.php',
        'IQuackStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/IQuackStrategy.php',
        'InputFormater' => __DIR__ . '/../..' . '/src/Structural/Decorator/InputFormater.php',
        'InternationalEddBuilder' => __DIR__ . '/../..' . '/src/Creational/BuilderDesignPattern/InternationalEddBuilder.php',
        'Invoker' => __DIR__ . '/../..' . '/src/Behavioral/Command/Invoker.php',
        'JetFlyStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/JetFlyStrategy.php',
        'Light' => __DIR__ . '/../..' . '/src/Behavioral/Command/Light.php',
        'LightDownCommand' => __DIR__ . '/../..' . '/src/Behavioral/Command/LightDownCommand.php',
        'LightOffCommand' => __DIR__ . '/../..' . '/src/Behavioral/Command/LightOffCommand.php',
        'LightOnCommand' => __DIR__ . '/../..' . '/src/Behavioral/Command/LightOnCommand.php',
        'LightUpCommand' => __DIR__ . '/../..' . '/src/Behavioral/Command/LightUpCommand.php',
        'LiskovSubstitution\\After\\BirdInterface' => __DIR__ . '/../..' . '/src/Solid/LiskovSubstitution/After/BirdInterface.php',
        'LiskovSubstitution\\After\\FlyingBird' => __DIR__ . '/../..' . '/src/Solid/LiskovSubstitution/After/FlyingBird.php',
        'LiskovSubstitution\\After\\Penguin' => __DIR__ . '/../..' . '/src/Solid/LiskovSubstitution/After/Penguin.php',
        'LiskovSubstitution\\After\\Sparrow' => __DIR__ . '/../..' . '/src/Solid/LiskovSubstitution/After/Sparrow.php',
        'LiskovSubstitution\\Before\\Bird' => __DIR__ . '/../..' . '/src/Solid/LiskovSubstitution/Before/Bird.php',
        'LiskovSubstitution\\Before\\Penguin' => __DIR__ . '/../..' . '/src/Solid/LiskovSubstitution/Before/Penguin.php',
        'LiskovSubstitution\\Before\\Sparrow' => __DIR__ . '/../..' . '/src/Solid/LiskovSubstitution/Before/Sparrow.php',
        'ListingFactory' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/ListingFactory.php',
        'LoudQuackStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/LoudQuackStrategy.php',
        'Mailer' => __DIR__ . '/../..' . '/src/Solid/DependencyInversion/Before/Mailer.php',
        'NoFlyStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/NoFlyStrategy.php',
        'NoQuackStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/NoQuackStrategy.php',
        'ORiellyBookFactory' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/Conceptual/ORiellyBookFactory.php',
        'ORiellyMysqlBook' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/Conceptual/ORiellyMysqlBook.php',
        'ORiellyPHPBook' => __DIR__ . '/../..' . '/src/Creational/AbstractFactoryPattern/Conceptual/ORiellyPHPBook.php',
        'OpenClosed\\After\\Bitcoin' => __DIR__ . '/../..' . '/src/Solid/OpenClosed/After/DebitCard.php',
        'OpenClosed\\After\\CreditCard' => __DIR__ . '/../..' . '/src/Solid/OpenClosed/After/CreditCard.php',
        'OpenClosed\\After\\PaymentMethod' => __DIR__ . '/../..' . '/src/Solid/OpenClosed/After/PaymentMethod.php',
        'OpenClosed\\After\\PaymentProcessor' => __DIR__ . '/../..' . '/src/Solid/OpenClosed/After/PaymentProcessor.php',
        'OpenClosed\\After\\Paypal' => __DIR__ . '/../..' . '/src/Solid/OpenClosed/After/Paypal.php',
        'OpenClosed\\Before\\PaymentProcessor' => __DIR__ . '/../..' . '/src/Solid/OpenClosed/Before/PaymentProcessor.php',
        'OpenGateState' => __DIR__ . '/../..' . '/src/Behavioral/State/OpenGateState.php',
        'PlainTextFormater' => __DIR__ . '/../..' . '/src/Structural/Decorator/PlainTextFormater.php',
        'Post' => __DIR__ . '/../..' . '/src/Behavioral/Template/Post.php',
        'ProxyBookParser' => __DIR__ . '/../..' . '/src/Structural/Proxy/ProxyBookParser.php',
        'RSortStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example2/RSortStrategy.php',
        'RealBookParser' => __DIR__ . '/../..' . '/src/Structural/Proxy/RealBookParser.php',
        'Record' => __DIR__ . '/../..' . '/src/Behavioral/Template/Record.php',
        'SharedShippingProfile' => __DIR__ . '/../..' . '/src/Creational/FactoryPattern/SharedShippingProfile.php',
        'ShippingProfileFactory' => __DIR__ . '/../..' . '/src/Creational/FactoryPattern/ShippingProfileFactory.php',
        'ShippingProfileInterface' => __DIR__ . '/../..' . '/src/Creational/FactoryPattern/ShippingProfileInterface.php',
        'SimpleFlyStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example1/SimpleFlyStrategy.php',
        'SingletonBook' => __DIR__ . '/../..' . '/src/Creational/Singleton/Conceptual/SingletonBook.php',
        'SortStrategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example2/SortStrategy.php',
        'Strategy' => __DIR__ . '/../..' . '/src/Behavioral/Strategy/Example2/Strategy.php',
        'Subscriber' => __DIR__ . '/../..' . '/src/Behavioral/Observer/Subscriber.php',
        'Target' => __DIR__ . '/../..' . '/src/Structural/Adapter/Target.php',
        'TextFormater' => __DIR__ . '/../..' . '/src/Structural/Decorator/TextFormater.php',
        'TextInput' => __DIR__ . '/../..' . '/src/Structural/Decorator/TextInput.php',
        'User' => __DIR__ . '/../..' . '/src/Behavioral/Template/User.php',
        'UserRegistration' => __DIR__ . '/../..' . '/src/Solid/DependencyInversion/Before/UserRegistration.php',
        'WordsCollection' => __DIR__ . '/../..' . '/src/Behavioral/Iterator/WordsCollection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4d05b5928556029f33892f19590b1ff3::$classMap;

        }, null, ClassLoader::class);
    }
}
