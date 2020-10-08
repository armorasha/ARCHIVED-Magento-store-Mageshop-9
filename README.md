# Magento-store-Mageshop-9

Mageshop-9 is a Magento v2.3.5 store that I have customised with:
- custom built magento modules
- data-driven Views/Layouts/Block/Templates
- widgets to display dynamic content like best sellers
- database schema modifications
- custom admin control panel menu links
- events and controllers
- routing to custom developed pages
- custom Product module in admin panel grid
- and many magento code-based-customisations.

The store runs on **Docker** and has **Redis caching** built-in as front-end cache to speed up page loads. See docker-compose.yml for docker build details. **Docker Engine** that mounted this **Mageshop9 Magento project docker image** was running on top of **Linux Ubuntu 20.04**.

Note: This Magento project's version was supposed to be v2.2.2, so Admin Panel grid for handling Blog Posts has deprecated code and will not work as intended on v2.3.5.