Feature: Kata Skeleton
  In order to practice a kata
  As a developer
  I need to be able to have a project skeleton to start with

  Scenario: Running phpunit tests
    Given I have a Sut class" with a phpunit test
    When I run phpunit tests
    Then I should see all tests passing