<?php
/*
 *  This file is part of the Quantum Unit Solutions development package.
 *
 *  (c) Quantum Unit Solutions <http://github.com/dmeikle/>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/1/2017
 * Time: 9:55 PM
 */

namespace QuantumUnit\Http;

/**
 * SiteParams
 *
 * @author Organization: Quantum Unit
 * @author Developer: David Meikle <david@quantumunit.com>
 */
class SiteParams
{

    /**
     * @var
     */
    protected $sitePath;

    /**
     * @var string
     */
    protected $configPath;

    /**
     * @var string
     */
    protected $logPath;

    /**
     * @var string
     */
    protected $siteName;

    /**
     * @var string
     */
    protected $cacheDirectory;

    /**
     * @var string
     */
    protected $debugOutputPath;

    /**
     * @var array
     */
    protected $siteConfig;

    /**
     * @var bool
     */
    protected $isCaching;

    /**
     * @return array
     */
    public function getSiteConfig(): array {
        return $this->siteConfig;
    }

    /**
     * @param array $siteConfig
     * @return $this
     */
    public function setSiteConfig(array $siteConfig) {
        $this->siteConfig = $siteConfig;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsCaching(): bool {
        return $this->isCaching;
    }

    /**
     * @param bool $isCaching
     * @return $this
     */
    public function setIsCaching(bool $isCaching): SiteParams {
        $this->isCaching = $isCaching;
        return $this;
    }


    /**
     * @return string
     */
    public function getSitePath(): string {
        return $this->sitePath;
    }

    /**
     * @param string $sitePath
     * @return $this
     */
    public function setSitePath(string $sitePath): SiteParams {
        $this->sitePath = $sitePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfigPath(): string {
        return $this->configPath;
    }

    /**
     * @param string $configPath
     * @return $this
     */
    public function setConfigPath(string $configPath): SiteParams {
        $this->configPath = $configPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogPath(): string {
        return $this->logPath;
    }

    /**
     * @param string $logPath
     * @return $this
     */
    public function setLogPath(string $logPath): SiteParams {
        $this->logPath = $logPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName(): string {
        return $this->siteName;
    }

    /**
     * @param string $siteName
     * @return $this
     */
    public function setSiteName(string $siteName): SiteParams {
        $this->siteName = $siteName;
        return $this;
    }


    /**
     * @return string
     */
    public function getCacheDirectory(): string {
        return $this->cacheDirectory;
    }

    /**
     * @param $cacheDirectory
     * @return $this
     */
    public function setCacheDirectory($cacheDirectory): SiteParams {
        $this->cacheDirectory = $cacheDirectory;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebugOutputPath(): string {
        return $this->debugOutputPath;
    }

    /**
     * @param $debugOutputPath
     * @return $this
     */
    public function setDebugOutputPath($debugOutputPath): SiteParams {
        $this->debugOutputPath = $debugOutputPath;
        return $this;
    }


}