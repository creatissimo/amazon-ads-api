<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendationMultiStatusResponse
{
    public function __construct(
        private array $error = [],
        private array $success = [],
    ) {
    }

    /** @return ErrorsIndex[] */
    public function getError(): array
    {
        return $this->error;
    }

    /** @param ErrorsIndex[] $error */
    public function setError(array $error): self
    {
        $this->error = $error;

        return $this;
    }

    /** @return SBRecommendationMultiStatusSuccess[] */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /** @param SBRecommendationMultiStatusSuccess[] $success */
    public function setSuccess(array $success): self
    {
        $this->success = $success;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            error: array_map(
                static fn(array $v) => ErrorsIndex::fromArray($v),
                $data['error'] ?? [],
            ),
            success: array_map(
                static fn(array $v) => SBRecommendationMultiStatusSuccess::fromArray($v),
                $data['success'] ?? [],
            ),
        );
    }
}
