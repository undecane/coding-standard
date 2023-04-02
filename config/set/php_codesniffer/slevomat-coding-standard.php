<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Numbers\DisallowNumericLiteralSeparatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Numbers\RequireNumericLiteralSeparatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\DisallowEqualOperatorsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\NegationOperatorSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\SpreadOperatorSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\DisallowIncrementAndDecrementOperatorsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassMemberSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ForbiddenPublicPropertySniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassStructureSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\RequireSelfReferenceSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\RequireMultiLineMethodSignatureSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\PropertyDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ConstantSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\TraitUseSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousErrorNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ParentCallSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\EmptyLinesAroundClassBracesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousInterfaceNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousTraitNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousAbstractClassNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiConstantDefinitionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\RequireConstructorPropertyPromotionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\UselessLateStaticBindingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\RequireSingleLineMethodSignatureSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiPropertyDefinitionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\PropertySpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousExceptionNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassLengthSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\EnumCaseSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\BackedEnumTypeSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\RequireAbstractOrFinalSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\MethodSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowLateStaticBindingForConstantsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowConstructorPropertyPromotionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Complexity\CognitiveSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Whitespaces\DuplicateSpacesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\RequireNowdocSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\TypeCastSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\RequireExplicitAssertionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\ForbiddenClassesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\ShortListSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\ReferenceSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\OptimizedFunctionsWithoutUnpackingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\DisallowReferenceSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\DeadCatchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\DisallowNonCapturingCatchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\RequireNonCapturingCatchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedClassNameInAnnotationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseDoesNotStartWithBackslashSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedGlobalConstantsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedGlobalFunctionsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\MultipleUsesPerLineSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\DisallowGroupUseSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\RequireOneNamespaceInFileSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseFromSameNamespaceSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseOnlyWhitelistedNamespacesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedExceptionsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Attributes\RequireAttributeAfterDocCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Attributes\DisallowMultipleAttributesPerLineSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Attributes\AttributesOrderSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Attributes\AttributeAndTargetSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Attributes\DisallowAttributesJoiningSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\DisallowVariableVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\DisallowSuperGlobalVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\DuplicateAssignmentToVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\MultiLineArrayEndBracketPlacementSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\DisallowImplicitArrayCreationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\AlphabeticallySortedByKeysSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\SingleLineArrayWhitespaceSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Files\FunctionLengthSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Files\FileLengthSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Files\TypeNameMatchesFileNameSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\StrictCallSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireTrailingCommaInCallSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowNamedArgumentsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\FunctionLengthSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireArrowFunctionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowTrailingCommaInClosureUseSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireTrailingCommaInDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowEmptyFunctionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireSingleLineCallSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowTrailingCommaInDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\StaticClosureSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireTrailingCommaInClosureUseSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\UselessParameterDefaultValueSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\ArrowFunctionDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireMultiLineCallSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowTrailingCommaInCallSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowArrowFunctionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowTrailingMultiLineTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireYodaComparisonSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireMultiLineConditionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\JumpStatementsSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireSingleLineConditionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceEqualOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowShortTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\NewWithoutParenthesesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireMultiLineTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\NewWithParenthesesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\BlockControlStructureSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\EarlyExitSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullSafeObjectOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowEmptySniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowNullSafeObjectOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessIfConditionWithReturnSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\UselessConstantTypeHintSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\NullTypeHintOnLastPositionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\DisallowMixedTypeHintSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\UnionTypeHintFormatSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\DisallowArrayTypeHintSyntaxSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\UselessInheritDocCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\RequireOneLineDocCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenAnnotationsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\InlineDocCommentDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\UselessFunctionDocCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\RequireOneLinePropertyDocCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\DocCommentSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\DisallowCommentAfterCodeSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenCommentsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\DeprecatedAnnotationDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\EmptyCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\DisallowOneLinePropertyDocCommentSniff::class);
};
