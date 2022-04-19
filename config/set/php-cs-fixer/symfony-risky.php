<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoUselessSprintfFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::class, [
        'include' => ['@compiler_optimized'],
        'scope' => 'namespaced',
        'strict' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\StringLengthToEmptyFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\TernaryToElvisOperatorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\NoTrailingWhitespaceInStringFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\ArrayPushFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\EregToPregFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\ErrorSuppressionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagOrderFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagsFixer::class, [
        'b_mode' => false,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Naming\NoHomoglyphNamesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\OrderedTraitsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Alias\SetTypeToCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\StringNotation\StringLineEndingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpUnit\PhpUnitConstructFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer::class);
};
