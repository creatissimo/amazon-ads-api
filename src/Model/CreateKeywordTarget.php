<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateKeywordTarget
{
    public function __construct(
        private string $keyword,
        private KeywordMatchType $matchType,
        private ?string $nativeLanguageKeyword = null,
        private ?LanguageLocale $nativeLanguageLocale = null,
    ) {
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getMatchType(): KeywordMatchType
    {
        return $this->matchType;
    }

    public function setMatchType(KeywordMatchType $matchType): self
    {
        $this->matchType = $matchType;

        return $this;
    }

    public function getNativeLanguageKeyword(): ?string
    {
        return $this->nativeLanguageKeyword;
    }

    public function setNativeLanguageKeyword(?string $nativeLanguageKeyword): self
    {
        $this->nativeLanguageKeyword = $nativeLanguageKeyword;

        return $this;
    }

    public function getNativeLanguageLocale(): ?LanguageLocale
    {
        return $this->nativeLanguageLocale;
    }

    public function setNativeLanguageLocale(?LanguageLocale $nativeLanguageLocale): self
    {
        $this->nativeLanguageLocale = $nativeLanguageLocale;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'keyword' => $this->keyword,
            'matchType' => $this->matchType->value,
        ];

        if ($this->nativeLanguageKeyword !== null) {
            $data['nativeLanguageKeyword'] = $this->nativeLanguageKeyword;
        }
        if ($this->nativeLanguageLocale !== null) {
            $data['nativeLanguageLocale'] = $this->nativeLanguageLocale->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            keyword: $data['keyword'],
            matchType: KeywordMatchType::from($data['matchType']),
            nativeLanguageKeyword: $data['nativeLanguageKeyword'] ?? null,
            nativeLanguageLocale: isset($data['nativeLanguageLocale']) ? LanguageLocale::from($data['nativeLanguageLocale']) : null,
        );
    }
}

