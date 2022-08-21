<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

final class CustomSet extends AbstractRuleSetDescription
{
    public function getName(): string
    {
        return 'custom';
    }

    public function getDescription(): string
    {
        return 'Custom Coding Style Ruleset';
    }

    /**
     * @return array{'@PhpCsFixer': true, '@PhpCsFixer:risky': true, class_attributes_separation: true, concat_space: array{spacing: string}, multiline_whitespace_before_semicolons: true, ordered_class_elements: array{order: string[]}, ordered_imports: array{imports_order: string[]}, phpdoc_align: array{align: string}, phpdoc_no_alias_tag: array{replacements: array{type: string, link: string}}, phpdoc_types_order: array{null_adjustment: string, sort_algorithm: string}, logical_operators: true, not_operator_with_successor_space: true, simplified_null_return: true, control_structure_continuation_position: true, declare_parentheses: true, nullable_type_declaration_for_default_null_value: true, phpdoc_line_span: true, self_static_accessor: true, simplified_if_return: true, yoda_style: true, php_unit_test_class_requires_covers: true}
     */
    public function getRules(): array
    {
        return [
            '@PhpCsFixer' => true,
            '@PhpCsFixer:risky' => true,
            'class_attributes_separation' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'multiline_whitespace_before_semicolons' => true,
            'ordered_class_elements' => [
                'order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private'],
            ],
            'ordered_imports' => [
                'imports_order' => ['class', 'function', 'const'],
            ],
            'phpdoc_align' => [
                'align' => 'left',
            ],
            'phpdoc_no_alias_tag' => [
                'replacements' => [
                    'type' => 'var',
                    'link' => 'see',
                ],
            ],
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'none',
            ],
            'logical_operators' => true,
            'not_operator_with_successor_space' => true,
            'simplified_null_return' => true,
            'control_structure_continuation_position' => true,
            'declare_parentheses' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'phpdoc_line_span' => true,
            'self_static_accessor' => true,
            'simplified_if_return' => true,
            'yoda_style' => false,
            'php_unit_test_class_requires_covers' => false,
            'fopen_flags' => [
                'b_mode' => true,
            ],
            'statement_indentation' => true,
            'no_multiple_statements_per_line' => true,
            'curly_braces_position' => true,
            'control_structure_braces' => true,
        ];
    }
}
