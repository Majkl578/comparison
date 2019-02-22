<?php

declare(strict_types=1);

namespace Comparison\Exception;

use LogicException;

final class NotComparable extends LogicException implements ComparisonException
{
}
