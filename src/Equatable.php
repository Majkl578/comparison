<?php

declare(strict_types=1);

namespace Comparison;

use Comparison\Exception\NotEquatable;

/**
 * When implemented together with Comparable, the natural ordering for a class C is said to be consistent
 * with equals if and only if e1.compareTo(e2) === 0 has the same boolean value as
 * e1.equals(e2) for every e1 and e2 of class C.
 *
 * @see https://docs.oracle.com/javase/9/docs/api/java/lang/Object.html#equals-java.lang.Object-
 * @see https://docs.oracle.com/javase/9/docs/api/java/lang/Comparable.html
 */
interface Equatable
{
    /**
     * Indicates whether some other object is "equal to" this one.
     *
     *  The equals method implements an equivalence relation on non-null objects:
     *   * It is reflexive: for any non-null value x, x.equals(x) should return true.
     *   * It is symmetric: for any non-null values x and y, x.equals(y) should return true
     *     if and only if y.equals(x) returns true.
     *   * It is transitive: for any non-null values x, y, and z, if x.equals(y) returns true and
     *     y.equals(z) returns true, then x.equals(z) should return true.
     *   * It is consistent: for any non-null values x and y, multiple invocations of x.equals(y)
     *     consistently return true or consistently return false, provided no information used in equals comparisons
     *     on the objects is modified.
     *   * For any non-null value x, x.equals(null) should return false.
     *
     * The equals method implements the most discriminating possible equivalence relation on objects;
     * that is, for any non-null reference values x and y, this method returns true if and only if
     * x and y refer to the same object (x == y has the value true).
     *
     * In case the implementor also implements Comparable, it is strongly recommended, but not strictly
     * required that x.equals(y) === (x.compareTo(y) === 0). Generally speaking, any class that implements
     * the Comparable interface and violates this condition should clearly indicate this fact.
     * The recommended language is: "Note: this class has a natural ordering that is inconsistent with equals."
     *
     * @param object $other The other object to compare.
     *
     * @return bool True if this object is the same as the $other argument argument; false otherwise.
     *
     * @throws NotEquatable If the specified object's type prevents it from being equated to this object.
     */
    public function equalsTo(object $other) : bool;
}
