<?php

declare(strict_types=1);

/*
 * This file is part of pbwork.
 * 
 * (c) Markus Schenker 2022 <scm@olternativ.ch>
 * @license LGPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/pnwscm60/contao-pbwork-bundle
 */

namespace Pnwscm60\ContaoPbworkBundle;

use Pnwscm60\ContaoPbworkBundle\DependencyInjection\Pnwscm60ContaoPbworkExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class Pnwscm60ContaoPbworkBundle
 */
class Pnwscm60ContaoPbworkBundle extends Bundle
{
	public function getContainerExtension(): Pnwscm60ContaoPbworkExtension
	{
		return new Pnwscm60ContaoPbworkExtension();
	}

	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
	}
}
