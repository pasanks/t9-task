

## True9 Tech Task 

To achieve the mentioned team forming requirement, there are so many complex algorithms such as the bin packing algorithm. 
But I implemented a simple algorithm to distribute players among teams evenly.

Steps as follows,
- Generate two unique random teams using any method that we already have in a preferred programming language.
- Calculate the total score of each team, and then take the difference. (Absolute value)
- If the difference is equal to 0, then teams are perfectly balanced. Add them to the final list and exit.
- We can set a range to check the difference so we can select teams with the almost same amount of skillset.
- If we don’t have any two teams matching score difference range, then start again 
- Recursively process this until we get matching teams.

Known Issues
- Not properly tested. There was a random issue getting uneven teams at the time of generation.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
