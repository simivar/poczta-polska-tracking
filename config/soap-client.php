<?php

declare(strict_types=1);

use Laminas\Code\Generator\PropertyGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Assembler\ImmutableSetterAssemblerOptions;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('https://tt.poczta-polska.pl/Sledzenie/services/Sledzenie?wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src2/Type')
    ->setTypeNamespace('Simivar\PocztaPolskaTracking\Type')
    ->setClientDestination('src2')
    ->setClientName('PocztaPolskaTrackingClient')
    ->setClientNamespace('Simivar\PocztaPolskaTracking')
    ->setClassMapDestination('src2')
    ->setClassMapName('PocztaPolskaTrackingClassmap')
    ->setClassMapNamespace('Simivar\PocztaPolskaTracking')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(
        (new Assembler\GetterAssemblerOptions())->withReturnType()->withBoolGetters()
    )))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        (new ImmutableSetterAssemblerOptions())->withTypeHints()->withReturnTypes()
    )))
    ->addRule(new Rules\AssembleRule(
        new Assembler\PropertyAssembler(PropertyGenerator::VISIBILITY_PRIVATE)
    ))
    ->addRule(new Rules\AssembleRule(
        new Assembler\FinalClassAssembler()
    ))
    ->addRule(new Rules\AssembleRule(new Assembler\ConstructorAssembler(
        (new Assembler\ConstructorAssemblerOptions())->withTypeHints()->withDocBlocks(false)
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\TypenameMatchesRule(
                    new Rules\AssembleRule(new Assembler\ResultAssembler()),
                    '/Response$/'
                ),
            ])
        )
    );
