
<div
    class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg"
    x-data="{ number: 0, target: @js($number), animated: @js($animated), label: @js($label) }"
    x-init="() => {
        if (animated) {
            const interval = Math.max(2500 / (target - number), 5);
            const step = Math.floor((target - number) / (2500 / interval));
            const handle = setInterval(() => {
                if (number < target) {
                    number += step;
                } else {
                    clearInterval(handle);
                    number = target;
                }
            }, interval);
        } else {
            number = target;
        }
    }"
>
    <dt class="order-last text-lg font-medium text-gray-500" x-text="label"></dt>
    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="number"></dd>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('stats', (target, animated, label) => ({
            number: 0,
            target,
            animated,
            label,
            init() {
                if (this.animated) {
                    const interval = Math.max(2500 / (this.target - this.number), 5);
                    const step = Math.floor((this.target - this.number) / (2500 / interval));
                    const handle = setInterval(() => {
                        if (this.number < this.target) {
                            this.number += step;
                        } else {
                            clearInterval(handle);
                            this.number = this.target;
                        }
                    }, interval);
                } else {
                    this.number = this.target;
                }
            }
        }));
    });
</script>
