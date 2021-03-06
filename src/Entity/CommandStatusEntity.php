<?php
declare(strict_types=1);

/**
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace Istyle\KsqlClient\Entity;

use Istyle\KsqlClient\Computation\CommandId;

/**
 * Class CommandStatusEntity
 */
final class CommandStatusEntity extends KsqlEntity
{
    /** @var CommandId */
    private $commandId;

    /** @var CommandStatus */
    private $commandStatus;

    /** @var int */
    private $commandSequenceNumber;

    /**
     * @param string        $statementText
     * @param CommandId     $commandId
     * @param CommandStatus $commandStatus
     * @param int           $commandSequenceNumber
     */
    public function __construct(
        string $statementText,
        CommandId $commandId,
        CommandStatus $commandStatus,
        int $commandSequenceNumber = - 1
    ) {
        parent::__construct($statementText);
        $this->commandId = $commandId;
        $this->commandStatus = $commandStatus;
        $this->commandSequenceNumber = $commandSequenceNumber;
    }

    /**
     * @return CommandId
     */
    public function getCommandId(): CommandId
    {
        return $this->commandId;
    }

    /**
     * @return CommandStatus
     */
    public function getCommandStatus(): CommandStatus
    {
        return $this->commandStatus;
    }

    /**
     * @return int
     */
    public function getCommandSequenceNumber(): int
    {
        return $this->commandSequenceNumber;
    }
}
